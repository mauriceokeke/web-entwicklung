<?php
namespace App\Models;
use CodeIgniter\Model;

class Task_model extends Model
{
    protected $table = 'tasks';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'tasks',
        'spaltenid',
        'personenid',
        'notizen',
        'erinnerung',
        'id'
    ];
    public function getData()

      {
          $this->tasks = $this->db->table('tasks');
          $this->tasks->select('tasks.tasks,tasks.id , personen.vorname ,personen.name , spalten.spalte , taskarten.taskart ,  tasks.personenid , tasks.taskartenid , tasks.spaltenid , tasks.sortid , tasks.erstelldatum , tasks.erinnerungsdatum , tasks.erinnerung , tasks.notizen , tasks.erledigt , tasks.geloescht');
      //    $this->tasks->from('tasks');
          $this->tasks->join('personen', 'personen.id = tasks.personenid', 'left');
          $this->tasks->join('spalten', 'spalten.id = tasks.spaltenid', 'left');
          $this->tasks->join('taskarten', 'tasks.taskartenid = taskarten.id', 'left');
        // $this->tasks->join('boards', 'spalten.boardsid = board.id','left');
         // $this->tasks->where('tasks.spaltenid = spalten.id' AND 'spalten.boardsid = board.id' AND 'boards.board = $boardId');
        //  $this->tasks->order_by('tasks', 'asc');
          $result = $this->tasks->get();
          return $result->getResultArray();
      //    $query = $this->tasks->get();
        //  return $query->getResultArray();
      }

public function deleteTask($id)
{
    $this->db->table('tasks')->delete(['id' => $id]);
    return redirect()->to(base_url('Tasks'))->with('success', 'Task wurde gelöscht.');
}


}
/*

    public function updateData()
    {
        $this->tasks = $this->db->table('tasks');
        $this->tasks = update('tasks.tasks,tasks.id , personen.vorname ,personen.name , spalten.spalte , taskarten.taskart ,  tasks.personenid , tasks.taskartenid , tasks.spaltenid , tasks.sortid , tasks.erstelldatum , tasks.erinnerungsdatum , tasks.erinnerung , tasks.notizen , tasks.erledigt , tasks.geloescht');


      return  $this->db->insert('tasks', $data);
    }
 public function createData()
{
     /*   $this->tasks = $this->db->table('tasks');
        $this->tasks = create('tasks.tasks,tasks.id , personen.vorname ,personen.name , spalten.spalte , taskarten.taskart ,  tasks.personenid , tasks.taskartenid , tasks.spaltenid , tasks.sortid , tasks.erstelldatum , tasks.erinnerungsdatum , tasks.erinnerung , tasks.notizen , tasks.erledigt , tasks.geloescht');
        $this->tasks->where('tasks');
        return $query->to(Tasks); */
     //   return $this->db->insert('tasks', $data);
      /*  $this->load->helper('url');

       // $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
        $id = $this->input->post('id');
        $personenid = $this->input->post('personenid');
        $taskartenid = $this->input->post('taskartenid');
        $spaltenid = $this->input->post('spaltenid');
        $sortid = $this->input->post('sortid');
        $tasks = $this->input->post('tasks');
        $erstelldatum = $this->input->post('erstelldatum');
        $erinnerungsdatum = $this->input->post('erinnerungsdatum');
        $erinnerung = $this->input->post('erinnerung');
        $notizen = $this->input->post('notizen');
        $erledigt = $this->input->post('erledigt');
        $geloescht = $this->input->post('geloescht'); */
       /*     'id' = $this->input->post('id');
        'personenid' = $this->input->post('personenid');
       // 'taskartenid' = $this->input->post('taskartenid');
        'spaltenid' = $this->input->post('spaltenid');
       // 'sortid' = $this->input->post('sortid');
        'tasks' = $this->input->post('tasks');
       // 'erstelldatum' = $this->input->post('erstelldatum');
        'erinnerungsdatum' = $this->input->post('erinnerungsdatum');
        'erinnerung' = $this->input->post('erinnerung');
        'notizen' = $this->input->post('notizen');
       // 'erledigt' = $this->input->post('erledigt');
       // 'geloescht' = $this->input->post('geloescht'); */
   // );