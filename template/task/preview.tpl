<table class="table table-bordered">
    <thead>
    <tr>
        <th>{$name}</th>
        <th class="text-right">{$email}</th>
        <th>{if $status eq 0} Uncomplate {else} Complate {/if}</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td width="320" height="240"><img src="{if $task->image eq NULL}/assets/img/no_photo.png{else}/assets/images/{$task->image}{/if}"></td>
        <td class="text-center">{$text}</td>
    </tr>
    </tbody>
</table>