{assign var="title" value="Login"}
{if !empty($myarray)}}
    <hr>
    Messages
    <hr>
{/if}

<form action="{$smarty.server.REQUEST_URI}" method="post">
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="login">Login</label>
                <input type="text" id="login" name="login" class="form-control">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="login">Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
        </div>
        <div class="col-sm-12">
            <button class="btn btn-primary btn-block" type="submit">Login</button>
        </div>
    </div>
</div>
</form>