{assign var="title" value="Create task"}
<form action="{$smarty.server.REQUEST_URI}" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <textarea rows="8" class="form-control" id="text" name="text"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <input type="file" name="image" class="form-control-file form-control-file" id="image" aria-describedby="fileHelp">
                    <small id="file" class="form-text text-muted">Supported formats: JPG/PNG/GIF. Max size: 320x240</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                    <hr>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" data-toggle="modal" data-target="#exampleModal" id="preview-button" class="btn btn-primary">Preview</button>
                </div>
            </div>
        </div>
    </div>
</form>

<div id="dialog" style="display: none" title="Preview">
    <p>This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
</div>

<script type="text/javascript">
    $("#preview-button").click(function($event){
        $.post({
            url: '/index.php?c=task&a=preview',
            data: {
                name: $("#name").val(),
                email: $("#email").val(),
                text: $("#text").val(),
            },
            success: function($data){
                $("#dialog").html($data);
                $("#dialog").dialog({
                    modal: true,
                    width:'90%',
                    height: 'auto',
                });
            }
        });
    });
</script>