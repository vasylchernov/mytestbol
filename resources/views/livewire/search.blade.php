


<div x-data="{ searchOpen: true }" >
    search tpl start_____ <br><br>

    <div
        x-cloak
        x-show="searchOpen"
        x-on:click="console.log(345)"
        x-on:open-search.window="searchOpen = !searchOpen"
    >
        <h3>searchOpen</h3>
    </div>

    <br><br>
    search tpl end_____
</div>
