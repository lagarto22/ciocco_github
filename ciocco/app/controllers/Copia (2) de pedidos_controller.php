<?php
class PedidosController extends AppController {
var $name = 'Pedidos';
// original //var $helpers = array('Html', 'Form', 'Time');

var $helpers = array('Form', 'Html', 'Javascript', 'Time');

//function index() {
//		$this->set('extras', $this->Extra->find('all'));
//	}
	
	function index() {
//		$this->Session->read('');
		$this->Pedido->recursive = 1;
//		$extras  = $this->Extra->find('all', array('conditions' => array('sucursal' => 'Brandsen')));
//		$pedidos  = $this->Pedido->find('all', array('conditions' => array('sucursal' => $this->Session->read('Auth.User.sucursal'))));
//	orig	$pedidos  = $this->Pedido->find('all')'
	//	$pedidos  = $this->Pedido->find('all', array('conditions' => array('status' => '0', 'fecha' => '2012-10-22')));
		$pedidos  = $this->Pedido->find('all', array('conditions' => array('status' => '0', 'fecha' => date('y-m-d'))));
		//		$pedidos = $this->Pedido->find('all', array('recursive' => 1));
//		debug($pedidos);
//		$pedidos  = $this->Pedido->User->find('all', array('conditions' => array('status' => '0')));
		$this->set('pedidos', $pedidos);
		//$users = $this->Extra->User->find('list', array('fields'=>'User.username'));
		//$this->set('users', $users);
	}
	
	function confirmar() {
		$this->layout = 'layoutconfirmar';
		$this->Pedido->recursive = 1; //para traer datos de las 2 tablas
	
	//	$id = $this->Pedido->id;
	//	$id = $this->Pedido->getLastInsertId(); $this->Pedido-> getInsertID(); 
	//	debug($id);
//orig		$detalles = $this->Pedido->find('all', array('conditions' => array('fecha' => date('y-m-d'), 'username' => $this->Session->read('Auth.User.username'))));
//		$detalles = $this->Pedido->find('all', array('conditions' => array('fecha' => date('y-m-d'), 'username' => $this->Session->read('Auth.User.username')))); //pedidos de un usuario por fecha
		$detalles = $this->Pedido->find('all', array('conditions' => array('fecha' => date('y-m-d'), 'username' => $this->Session->read('Auth.User.username'))));
	//	$detalles = $this->Pedido->find('first', array('fields' => 'MAX(Pedido.id)'), array('conditions' => array('fecha' => date('y-m-d'), 'username' => $this->Session->read('Auth.User.username')))); 
	//	$id = $this->Pedido->getInsertID();
	//	$detalles  = $this->Pedido->find('first', array('fields' => array('Pedido.id'),'order' => 'Pedido.id ASC'), array('conditions' => array('fecha' => date('y-m-d'), 'username' => $this->Session->read('Auth.User.username'))));
	//	$detalles = $this->Pedido->find('all', array('conditions' => array('Pedido.id' => $lastinsertID)));
	//	$detalles =$this->Pedido->find('first',array('order'=>array('Pedido.id DESC')));
	//	$detalles =$this->Pedido->find('first',array('order'=>array('Pedido.id' = $this->Pedido->id)));	
//$detalles = $this->Pedido->query("SELECT last_insert_id() FROM pedidos AS Pedido where fecha = '2012-10-24';");
		
//		$detalles = $this->Pedido->find('first', array('fields'=>array('Pedido.id','MAX(Pedido.id) as pedido'), 'username' => $this->Session->read('Auth.User.username')));

	//	$detalles = $this->Pedido->find('first', array('fields' => array('MAX(Pedido.id) as pedido'),'group' => 'Pedido.id'));
		//		debug($this->data);
		$this->set('detalles', $detalles);
	}
	
//function index($status=null) {
//if($status == 'hecha')
//$tareas = $this->Tarea->find('all', array('conditions' =>
//array('Tarea.hecha' => '1')));
//else if($status == 'pendiente')
//$tareas = $this->Tarea->find('all', array('conditions' =>
//array('Tarea.hecha' => '0')));
//else
//$tareas = $this->Tarea->find('all');
//$this->set('tareas', $tareas);
//$this->set('status', $status);
//}



function edit($id = null) {
if (!$id) {
$this->Session->setFlash('Nro. de Pedido Inválido');
$this->redirect(array('action'=>'index'), null, true);
}
if (empty($this->data)) {
$this->data = $this->Pedido->find(array('Pedido.id' => $id));
} else {
if ($this->Pedido->save($this->data)) {
$this->Session->setFlash('La Informacion ha sido salvada');
$this->redirect(array('action'=>'index'), null, true);
} else {
$this->Session->setFlash('La Informacion no ha podido ser salvada.
inténtalo de nuevo.');
}
}
}

//function delete($id = null) {
//if (!$id) {
//$this->Session->setFlash('id Invalida para Tarea');
//$this->redirect(array('action'=>'index'), null, true);
//}
//if ($this->Tarea->delete($id)) {
//$this->Session->setFlash('Tarea #'.$id.' borrada');
//$this->redirect(array('action'=>'index'), null, true);
//}
//}

function pdf()
    {
//        if (!$id)
//        {
//            $this->Session->setFlash('no has seleccionado ningun pdf.');
 //           $this->redirect(array('action'=>'index'));
//        }
        // Sobrescribimos para que no aparezcan los resultados de debuggin
        // ya que sino daria un error al generar el pdf.
        Configure::write('debug',0);
//        $resultado = $this->Extra->findById($id);
//		$this->Extra->recursive = 1;
		$resultado  = $this->Extra->find('all');
        $this->set("datos_pdf",$resultado);
        $this->layout = 'pdf'; //esto usara el layout pdf.ctp
        $this->render();
    }


function export_xls() {
		$this->Pedido->recursive = 1;
//		$data = $this->Extra->find('all');
		
//orig		$data  = $this->Pedido->find('all', array('conditions' => array('sucursal' => $this->Session->read('Auth.User.sucursal'))));
		$data  = $this->Pedido->find('all', array('conditions' => array('status' => '0', 'fecha' => date('y-m-d'))));
		$this->set('rows',$data);
		$this->render('export_xls','export_xls');

	}

//function resta($inicio, $fin) {
//
//$dif=date("H:i:s", strtotime("00:00:00") + strtotime("00:00:00"))
//	return $dif;
//$this->set('pepe', $dif);
//}



function add() {
//debug($this->data);
if (!empty($this->data)) {
$this->Pedido->create();
//if ($this->Pedido->save($this->data)) { original
//debug($this->data);
//var_dump($this->data);
$this->data['Pedido']['detalle'] = implode(',', $this->data['Pedido']['detalle']);
//var_dump($this->data);
//print_r($_POST[Pedido][detalle]);
//$detalle = array('Anana', 'Chocolate', 'Granizado');
//$pepe = implode(",", $detalle);
//echo $pepe;
//$this->data = $pepe;
if ($this->Pedido->save($this->data)) {
//$id_recien_guardado = $this->Pedido->id;
//print_r($this->data);
//debug($this->data);
//echo (int)$this->Pedido->getLastInsertID();
//$lastinsertID = $this->Pedido->getLastInsertId();
//$this->set("lastInsertID", $this-> Pedido ->getLastInsertId());
$this->Session->setFlash('La Informacion ha sido salvada');

$this->redirect(array('action'=>'confirmar'), null, true);
} else {
$this->Session->setFlash('La Informacion no ha sido salvada. Prueba de nuevo.');
}
}
//$users = $this->Extra->User->find('list', array('fields'=>'User.username'));
//$this->set('users', $users);
}
}
?>