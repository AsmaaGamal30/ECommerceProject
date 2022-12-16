<?php if ((isset($errors) && $errors  !=''))
{?> <div class="col-sm-6 offset-sm-3 border p-3 mt-3">
    <h3 class="alert alert-danger text-center"> <?php echo $errors; ?>  </h3>
</div>
<?php
}
?>
<?php
if (isset($success)&& $success!='')
{?>
<div class="col-sm-6 offset-sm-3 border p-3 mt-3">
        <h3 class="alert alert-success text-center"> <?php echo $success; ?>  </h3>

<?php
header("refresh:4;url=index.php");
}
?>
