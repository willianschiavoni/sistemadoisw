<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('/')?>">Home</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('empresaria')?>">Empresaria</a>
    </li>
    <li class="breadcrumb-item active">Editar</li>
</ol>

<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="col-md-8">
                    <h3>Editar</h3>
                </div>

                <div class="col-md-4">

                </div>
            </div> 

        </div>
    </div>       
    <div class="container-fluid">
        <div class="card-body"> 

            <?php echo form_open('empresaria/edit/'.$empresaria['IDEmpresaria'],array("class"=>"form-horizontal")); ?>

            <div class="form-group">
                <label for="IDExecutiva" class="col-md-4 control-label">Executiva</label>
                <div class="col-md-8">
                    <select name="IDExecutiva" class="form-control">
                        <option value="">select executiva</option>
                        <?php 
                        foreach($all_executivas as $executiva)
                        {
                            $selected = ($executiva['IDExecutiva'] == $empresaria['IDExecutiva']) ? ' selected="selected"' : "";

                            echo '<option value="'.$executiva['IDExecutiva'].'" '.$selected.'>'.$executiva['IDExecutiva'].'</option>';
                        } 
                        ?>
                    </select>
                    <span class="text-danger"><?php echo form_error('IDExecutiva');?></span>
                </div>
            </div>
            <div class="form-group">
                <label for="limite" class="col-md-4 control-label">Limite</label>
                <div class="col-md-8">
                    <input type="text" name="limite" value="<?php echo ($this->input->post('limite') ? $this->input->post('limite') : $empresaria['limite']); ?>" class="form-control" id="limite" />
                    <span class="text-danger"><?php echo form_error('limite');?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>