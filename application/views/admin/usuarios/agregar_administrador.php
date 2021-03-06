<?php
	$this->load->view('admin/admin_header');

	$opciones = Array(
 	
	 	array(
	 	'titulo' => 'Cancelar',
	 	'icono' => 'icon-32-cancel',
	 	'link' => 'administradores/'	
	 	)
 	);
 	
 	$data	=	array(
	'titulo' => 'Nuevo Administrador',
	'icono' => 'icon-48-groups-add',
	'ops'	=> $opciones,
	'miga' => '<a href="administradores/">administradores</a> | <strong>Agregar</strong>'
	);	 	
 	
?>
	<div class="section">

		<?php $this->load->view('admin/admin_top',$data)?>
		
		<?php if($this->session->flashdata('success')):?>		
		<div id="success" class="info_div"><span class="ico_success"><?php echo $this->session->flashdata('success')?></span></div>
		<?php endif;?>
		
		<?php if($this->session->flashdata('error')):?>
		<div id="fail" class="info_div"><span class="ico_cancel"><?php echo $this->session->flashdata('error')?></span></div>		
		<?php endif;?>
		
		<?=form_error('email','<div id="fail" class="info_div"><span class="ico_cancel">','</span></div>'); ?>
		<?=form_error('nombre_completo','<div id="fail" class="info_div"><span class="ico_cancel">','</span></div>'); ?>
	    <?=form_error('contrasena','<div id="fail" class="info_div"><span class="ico_cancel">','</span></div>')?>

		<?php $data['round'] = 'top'?>
		<?php $this->load->view('admin/admin_round',$data)?>		
		<div id="edit_form">
		
			<?php echo form_open('administradores/agregar/'); ?>
			
			<label><strong>E-mail</strong></label>						
			<?php echo form_input('email', set_value('email'),'class="inputclass"');?>
						
			<br />
			
			<label><strong>Nombre Completo</strong></label>					
			<?php echo form_input('nombre_completo', set_value('nombre_completo'),'class="inputclass"');?>			
			
			<br />
						
			<label><strong>Contraseña</strong></label>						
			<?=form_password('contrasena','','class="inputclass"');?>
		
			<br />
			<?php echo form_submit('add','Guardar','id="save"  class="loginbutton" class="submit"');?>
				
			<?php echo form_close(); ?>
			
		</div>
		<?php $data['round'] = 'bottom'?>
		<?php $this->load->view('admin/admin_round',$data)?>
	</div><!-- end #section -->
<?php 
	$this->load->view('admin/admin_footer');
?>