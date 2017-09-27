<div id="header">
    <h1>{$site_name}</h1>
    <div id="main-nav-bg">
        <ul id="main-nav">
            <li><a href="/index.php?c=task&a=index">Tasks</a></li>
            <li><a href="/index.php?c=task&a=create">Create new</a></li>
            <li><a href="/index.php?c=admin&a=about">About</a></li>
            {if $smarty.session.logged eq true}
                <li><a href="/index.php?c=login&a=logout">Logout</a></li>
            {else}
                <li><a href="/index.php?c=login&a=login">Login</a></li>
            {/if}
        </ul>
        <div class="clear"></div>
    </div><!-- main-nav-bg end -->
</div><!-- header end -->