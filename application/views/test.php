<html>

<body>

<div class="CustomForm">
    <?php echo form_open_multipart(base_url().'test', array('class' => 'newsForm')); ?>
    <div class="row">
        <input type="file" class="InputField" name="newsphoto" value="">
        <input type="text" class="InputField" name="title" value="">
        <textarea name="news" class="InputField" cols="30" rows="10"></textarea>
        <button>Go</button>
    </div>
    <?php form_close(); ?>
</div> 
</body>
<script type="text/javascript">
           $(document).ready(function () {
               var form = $('form.newsForm');
               form.on('submit', function (c) {
                   c.preventDefault();

                   var data = new FormData();
                   $.each($('form.newsForm :input'), function(i, fileds){
                       data.append($(fileds).attr('name'), $(fileds).val());
                   });
                   $.each($('form.newsForm input[type=file]')[0].files, function (i, file) {
                       data.append(file.name, file);
                   });
                   $.ajax({
                       url: '<?php echo base_url(); ?>/test',
                       data: data,
                       cache: false,
                       contentType: false,
                       processData: false,
                       type: 'POST',
                       success: function (c) {
                           var msg = $('div.jsMessage');
                           msg.empty();
                           msg.html(c);
                       }
                   });
                   return false;
               });
           })
</script>
<html>

