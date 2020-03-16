<?php
    function adminer_object()
    {
        include_once "./plugins/plugin.php";

        foreach (glob("plugins/*.php") as $filename) {
            include_once "./$filename";
        }

        $plugins = [
            new AdminerTheme("default-green"),
            new AdminerEditCalendar(),
            new FasterTablesFilter(),
            new AdminerJsonPreview(),
            new AdminerDisableTables(),
        ];

        return new AdminerPlugin($plugins);
    }

    include "./adminer.php";
?>