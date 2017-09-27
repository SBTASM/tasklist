{assign var="title" value="Edit task"}
<form action="{$smarty.server.REQUEST_URI}" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="{$task->email}">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter name" value="{$task->name}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <textarea rows="8" class="form-control" id="text" name="text">{$task->text}</textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" name="status" class="form-check-input">
                        Completed
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                    <hr>
                    <button type="submit" class="btn btn-primary">Save</button></div>
            </div>
        </div>
    </div>
</form>