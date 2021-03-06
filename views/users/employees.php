<?php 

?>

<table cellpadding="0" cellspacing="0" border="0" class="display" id="employees" width="100%">
    <thead>
        <tr>
            <th><?php echo lang('users_employees_thead_id');?></th>
            <th><?php echo lang('users_employees_thead_firstname');?></th>
            <th><?php echo lang('users_employees_thead_lastname');?></th>
            <th><?php echo lang('users_employees_thead_email');?></th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($employees as $employee): ?>
    <tr>
        <td><?php echo $employee['id'] ?></td>
        <td><?php echo $employee['firstname'] ?></td>
        <td><?php echo $employee['lastname'] ?></td>
        <td><?php echo $employee['email'] ?></td>
    </tr>
<?php endforeach ?>
	</tbody>
</table>

<link href="<?php echo base_url();?>assets/datatable/css/jquery.dataTables.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url();?>assets/datatable/js/jquery.dataTables.min.js"></script>

<style>
    tr.row_selected td{background-color:#b0bed9 !important;}
</style>

<script type="text/javascript">
$(document).ready(function() {
   
    $('#employees').dataTable({
        "pageLength": 5,
        "oLanguage": {
                    "sEmptyTable":     "<?php echo lang('datatable_sEmptyTable');?>",
                    "sInfo":           "<?php echo lang('datatable_sInfo');?>",
                    "sInfoEmpty":      "<?php echo lang('datatable_sInfoEmpty');?>",
                    "sInfoFiltered":   "<?php echo lang('datatable_sInfoFiltered');?>",
                    "sInfoPostFix":    "<?php echo lang('datatable_sInfoPostFix');?>",
                    "sInfoThousands":  "<?php echo lang('datatable_sInfoThousands');?>",
                    "sLengthMenu":     "<?php echo lang('datatable_sLengthMenu');?>",
                    "sLoadingRecords": "<?php echo lang('datatable_sLoadingRecords');?>",
                    "sProcessing":     "<?php echo lang('datatable_sProcessing');?>",
                    "sSearch":         "<?php echo lang('datatable_sSearch');?>",
                    "sZeroRecords":    "<?php echo lang('datatable_sZeroRecords');?>",
                    "oPaginate": {
                        "sFirst":    "<?php echo lang('datatable_sFirst');?>",
                        "sLast":     "<?php echo lang('datatable_sLast');?>",
                        "sNext":     "<?php echo lang('datatable_sNext');?>",
                        "sPrevious": "<?php echo lang('datatable_sPrevious');?>"
                    },
                    "oAria": {
                        "sSortAscending":  "<?php echo lang('datatable_sSortAscending');?>",
                        "sSortDescending": "<?php echo lang('datatable_sSortDescending');?>"
                    }
                }
    });
 
    $('.dataTables_length').css("display", "none");
   
    $('body').on("click", "#employees tbody tr", function () {
            $("#employees tbody tr").removeClass('row_selected');		
            $(this).addClass('row_selected');
    });
    $("#employees tbody tr:first").addClass('row_selected');
});
</script>
