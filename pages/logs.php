<?php 
	class account_log{
		public $json_data; 
		public $total_hours; 
		public $hours_unpaid;

		public static $types = array("In Progress", "Completed", "Needs Attention", "Canceled", "Future Update");

		public function __construct($json){ 
			$this->json_data = $json; 

			//Compute the total hours for this account 
			$this->total_hours = 0;
			foreach($this->json_data->projects as $project){
				foreach($project->tasks as $task){
					$this->total_hours += $task->hours_worked;
				}
			}

			$this->hours_unpaid = $this->total_hours - $this->json_data->hours_paid;
		}

		public function generate_html(){
			
			return <<<HTML

			<section class="account" class="col-md-12"> 
				<h2> {$this->json_data->account_name} <small class='no-break'>{$this->get_total_hours_account()} | Unpaid {$this->hours_unpaid} / Paid {$this->json_data->hours_paid}</small></h2> 
				{$this->print_projects()}
			</section>

HTML;
			
		}

		private function get_total_hours_account(){
			if($this->json_data->show_hours){
				return "Total Hours: " . $this->total_hours;
			}
		}

		private function get_total_hours_project($project){ 
			if($this->json_data->show_hours){
				$hours = 0; 
				foreach($project->tasks as $task){
					$hours += $task->hours_worked;
				}
				return "Hours Worked: " . $hours; 
			}
		}

		private function get_total_hours_task($task){
			if($this->json_data->show_hours){
				return "<p> <strong> Hours Worked: </strong> {$task->hours_worked} </p>";

			}
		}

		private function print_notes($task){
			$string = ""; 
			foreach($task->notes as $note){
				$string .=  <<<HTML
					<li> <i class='fa-li fa fa-check-square-o'></i>$note </li> 
HTML;
			}
			return $string; 
		}		
									

		private function print_bugs($task){
			$string = ""; 
			if($task->bugs){
				$string .= "<p> <strong> Known Bugs: </strong></p><ul class='fa-ul'>";
				foreach($task->bugs as $bug){
					$string .= "<li> <i class='fa-li fa fa-bug'></i>$bug </li>";
				}
				$string .= "</ul>"; 
			}
			return $string; 
		}

		private function generate_task_icon($task){ 
			if(strcasecmp($task->status, "Completed") == 0) return " <i class='completed-task fa fa-check-square-o'></i>" ;
			else if(strcasecmp($task->status, "Canceled") == 0) return " <i class='canceled-task fa fa-times'></i>" ;
			else if(strcasecmp($task->status, "Needs Attention") == 0) return " <i class='attention-task fa fa-exclamation-triangle'></i>" ;
			else if(strcasecmp($task->status, "In Progress") == 0) return " <i class='in-progress-task fa fa-spinner fa-spin'></i>" ;
			else if(strcasecmp($task->status, "Future Update") == 0) return " <i class='in-progress-task fa fa-cogs'></i>" ;
		}

		private function print_tasks($project){
			//Sort the tasks by status 
			$sorted_project = array(); 
			foreach($project->tasks as $task){if(strcasecmp($task->status, "Needs Attention") == 0) array_push($sorted_project, $task);}
			foreach($project->tasks as $task){if(strcasecmp($task->status, "In Progress") == 0) array_push($sorted_project, $task);}
			foreach($project->tasks as $task){if(strcasecmp($task->status, "Future Update") == 0) array_push($sorted_project, $task);}
			foreach($project->tasks as $task){if(strcasecmp($task->status, "Completed") == 0) array_push($sorted_project, $task);}
			foreach($project->tasks as $task){if(strcasecmp($task->status, "Canceled") == 0) array_push($sorted_project, $task);}


			$string = ""; 
			foreach($sorted_project as $task){
				if(strcasecmp($task->status, "Completed") == 0) {
					$className = "hidden"; 
					$toggleText = "View Info";
				}
				else {
					$className = "active"; 
					$toggleText = "Hide Info";
				}

				$string .= <<<HTML
					<section class="task col-md-12">
						<div> 
							<p> <strong> Task Name:</strong> {$task->name} {$this->generate_task_icon($task)} <a href="#" class="pull-right showtask">[$toggleText]</a></p>
							<section class="{$className}"> 
								<p> <strong> Task Description: </strong>{$task->description} </p>
								<p> <strong> Task Type: </strong>{$task->type} </p>
								<p> <strong> Task Status: </strong> {$task->status} </p>
								{$this->print_bugs($task)} 
								<p> <strong> Breakdown: </strong></p>
								<ul class="fa-ul"> 
									 {$this->print_notes($task)} 
								</ul> 
								{$this->get_total_hours_task($task)}
							</section>
						</div> 
					</section>
HTML;
			}

			return $string; 
		}	

		private function print_projects(){ 
			$string = ""; 
			foreach($this->json_data->projects as $project){
				$string .=  <<<HTML
					<section class='project col-md-12'>
						<h3> {$project->name} <small> {$this->get_total_hours_project($project)} </small></h3>
						<p> {$project->description} </p>
						<section>
							<h4> <strong> Tasks: </strong> </h4> 
							<div class='row'>{$this->print_tasks($project)}</div>
						</section>
					</section>
		
HTML;
			}

			return $string; 
		}




	}

	$data = toolbox::load_json('logs'); 
	if(isset($_GET['account'])){
		$account_id = $_GET['account'];
		$index = -1; 
		foreach($data->accounts as $key=>$account){
			if(strcasecmp($account->account_id, $account_id) == 0) $index = $key; 
		}

		if($index != -1){
			$account = new account_log($data->accounts[$index]); //0 is for the genetics for now use this
			$html = $account->generate_html();
		}
		else{
			$html = "<div class='alert alert-warning' role='alert'>This page is for clients that have a project with me. Make sure the account variable in the URL is correct!</div>";
		}
	}
	else{
		$html = "<div class='alert alert-warning' role='alert'>This page is for clients that have a project with me. Make sure the account variable in the URL is correct!</div>";
	}
	
	
	
	 	
?>
<section class="container" id="content"> 
	<div class="row"> 
		<?php echo $html ?>
	</div>
</section>