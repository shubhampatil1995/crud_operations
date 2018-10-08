<?php
App::uses('AppController', 'Controller');
class EmployeeController extends AppController 
{
	public $helpers = array('Html', 'Form', 'Flash','Global');
	public $components = array('Flash');
	
    public function index()
    {
		$this->set('res', $this->Employee->find('all'));
    }
	
	public function add(){
		if($this->request->is('post')){
            if ($this->Employee->save($this->request->data)) {
				$this->Flash->success("Added Succefully!!!");
                return $this->redirect(array('action' => 'index'));
			}
		}
	}
	
	 public function edit($id){
		 if ($this->request->is('post')) {
			$this->Employee->id = $id;
			if ($this->Employee->save($this->request->data)) {
				 $this->Flash->success("Updated Succefully!!!");
				return $this->redirect(array('action' => 'index'));
			}
		 }else{
            $details = $this->Employee->findById($id);
            $this->set('details',$details);
         }
      }
	  
	  public function delet	($id){
		 if ($this->Employee->delete($id)) {
			 $this->Flash->success(__('The Employee with id: %s has been deleted.',$id));
			}
			return $this->redirect(array('action' => 'index'));
      }
	
}