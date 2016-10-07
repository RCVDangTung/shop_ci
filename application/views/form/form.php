<?php $a = isset($data) ? $data : '';
    echo "<pre>";
    var_dump($a['post']);
?>
<form role="form" action="<?php echo site_url('form'); ?>" method="POST">
    <div class="form-group">
        <label for="search">SEARCH</label>
        <input type="text" class="form-control" id="search" name="search" value="<?php echo htmlspecialchars($a['post']) ?>">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>

