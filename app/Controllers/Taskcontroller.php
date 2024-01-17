<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Task_model;

//use App\Models\Task_model;
class Taskcontroller extends BaseController {
    public function Tasks(){
        $data = [
            'title' => 'Tasks'
        ];
        $tasks = new Task_model();
        $data['tasks'] = $tasks->getData();
        usort($data['tasks'], function ($a, $b) {
            return strcmp($a['tasks'], $b['tasks']); });
        return view('pages/Startseite', $data);
    }

 public function NeueTasks(){
     $tasks = new Task_model();
     $data['tasks'] = $tasks->getData();
    echo view('pages/NeueTasks', $data);

}
   public function Eingabetasks()  {
       $tasks = new Task_model();
       $data=[
           'tasks' => $this->request->getPost('tasks'),
           'spaltenid' => $this->request->getPost('spaltenid'),
           'personenid'=> $this->request->getPost('personenid'),
           'erinnerungsdatum'=> $this->request->getPost('erinnerungsdatum'),
           'erinnerung'=> $this->request->getPost('erinnerung'),
           'notizen' => $this->request->getPost('notizen')
       ];
       $tasks->save($data);
       return redirect()->to(base_url())->with('status','Task added Successfully');
    }
    public function edit($id=null)
    {
        $tasks = new Task_model();
        $data['task'] = $tasks->find($id);
        return view('pages/EditTasks',$data);
    }
    public function update($id = null){
        $tasks = new Task_model();
        $data = [
            'tasks' => $this->request->getPost('tasks'),
            'spaltenid' => $this->request->getPost('spaltenid'),
            'personenid'=> $this->request->getPost('personenid'),
            'erstelldatum'=> $this->request->getPost('erstelldatum'),
            'notizen' => $this->request->getPost('notizen')
        ];
        $tasks->update($id, $data);
        return redirect()->to(base_url())->with('status','Task changed Successfully');
    }
}



/* $this->load->helper('form');
$this->load->library('form_validation');
$data['tasks'] = 'Task erstellen';

$this->form_validation->set_rules('tasks','Tasks' ,'required');
$this->form_validation->set_rules('spaltenid','Spaltenid' , 'required');
$this->form_validation->set_rules('erinnerung','Erinnerung' , 'required');
$this->form_validation->set_rules('erinnerungsdatum','Erinnerungsdatum' , 'required');
$this->form_validation->set_rules('notizen','Notizen' , 'required');
$this->form_validation->set_rules('personenid','Personenid' , 'required');

if ($this->form_validation->run() === FALSE)
{
   $this->load->view('pages/NeueTasks', $data);


}
else */
//   {
//     $this->Task_model->createData();
//      $this->load->view('pages/Startseite');
//   }
//   $tasks = new Task_model();
//  $this->Task_model->createData();
// return redirect()->to(base_url());
/* $data=[
     'tasks' => $this->request->getPost('tasks'),
     'id' => $this->request->getPost('id'),
     'spaltenid' => $this->request->getPost('spaltenid'),
     'personenid'=> $this->request->getPost('personenid'),
     'erinnerung'=> $this->request->getPost('erinnerung'),
     'erinnerungsdatum'=> $this->request->getPost('erinnerungsdatum'),
     'notizen' => $this->request->getPost('notizen')
 ]; */
// $this->load->model('Task_model', 'getData');
//$tasks->Task_model->createData($data);
//redirect()->to(base_url())->with('status','Task added Successfully');
//  $tasks->save($data);
//  return redirect()->to(base_url())->with('status','Task added Successfully');

/*  public function EingabeTasks(){
      $tasks = new Task_model();

/*  $this->load->library('form_validation');
$this->form_validation->set_rules('tasks','Tasks' ,'required');
      $this->form_validation->set_rules('spaltenid','Spaltenid' , 'required');
      $this->form_validation->set_rules('erinnerung','Erinnerung' , 'required');
      $this->form_validation->set_rules('erinnerungsdatum','Erinnerungsdatum' , 'required');
      $this->form_validation->set_rules('notizen','Notizen' , 'required');
      $this->form_validation->set_rules('personenid','Personenid' , 'required');
      if($this->form_validation->run()){
         $data=[
          'tasks' => $this->input->post('tasks'),
          'id' => $this->input->post('id'),
          'spaltenid' => $this->input->post('spaltenid'),
          'personenid'=> $this->input->post('personenid'),
          'erinnerung'=> $this->input->post('erinnerung'),
          'erinnerungsdatum'=> $this->input->post('erinnerungsdatum'),
          'notizen' => $this->input->post('notizen')
      ];
      $this->load->model('Task_model');
$this->Task_model->createData($data);
      redirect()->to(base_url())->with('status','Task added Successfully');
  //
    //  else redirect()->to(base_url())->with('status','Task NOT added Successfully');
  } */
//   public function BearbeitenTasks(){
//      if ('Speichern') { updateData();
//         return;  }
//   echo view('pages/NeueTasks', $data);