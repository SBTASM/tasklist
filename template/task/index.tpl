{assign var="title" value="All tasks"}

<hr>
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="{$smarty.server.REQUEST_URI}&sort=name">Sort by name</a></li>
                    <li class="page-item"><a class="page-link" href="{$smarty.server.REQUEST_URI}&sort=email">Sort by email</a></li>
                    <li class="page-item"><a class="page-link" href="{$smarty.server.REQUEST_URI}&sort=status">Sort by status</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-sm-12">
        {foreach $tasks as $task}
            <table class="table table-bordered">
                <thead>
                {if $is_admin eq true}
                    <tr>
                        <th class="text-center {if $task->status eq 0 }text-danger{else}text-success{/if}">{if $task->status eq 0} Uncomplate {else} Complate {/if}</th>
                        <th class="text-right"><a href="/index.php?c=admin&a=edit&id={$task->id}">Edit</a></th>
                    </tr>
                {else}
                    <tr>
                        <th colspan="2" class="text-center {if $task->status eq 0 }text-danger{else}text-success{/if}">{if $task->status eq 0} Uncomplate {else} Complate {/if}</th>
                    </tr>
                {/if}
                <tr>
                    <th>{$task->name}</th>
                    <th class="text-right">{$task->email}</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td width="320" height="240"><img src="{if $task->image eq NULL}/assets/img/no_photo.png{else}/assets/images/{$task->image}{/if}"></td>
                    <td class="text-center">{$task->text}</td>
                </tr>
                </tbody>
            </table>
        {/foreach}
    </div>

</div>
{if $pages eq 0}
    <div class="text-center">
        <p class="text-danger h2">Tasks not found:(</p>
    </div>
{elseif $pages > 1}
    <hr>
{/if}
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="Page navigation example" class="">
                <ul class="pagination justify-content-center">
                    {if $pages > 1}
                        {if $pages > 5}
                            {for $page=1 to 4}
                                <li class="page-item"><a class="page-link" href="{$smarty.server.REQUEST_URI}&page={$page}">{$page}</a></li>
                            {/for}
                            <li class="page-item"><a class="page-link">...</a> </a></li
                            <li class="page-item"><a class="page-link" href="/{$smarty.server.REQUEST_URI}&page={$pages-1}">{$pages-1}</a></li>
                        {else}
                            {for $page=1 to $pages}
                                <li class="page-item"><a class="page-link" href="{$smarty.server.REQUEST_URI}&page={$page}">{$page}</a></li>
                            {/for}
                        {/if}
                    {/if}
                </ul>
            </nav>
        </div>
    </div>
</div>