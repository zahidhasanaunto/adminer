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
            // new AdminerLoginPasswordLess(),
            // new AdminerLoginPasswordLess(password_hash("YOUR_PASSWORD_HERE", PASSWORD_DEFAULT)),
            new AdminerJsonColumn(),
            new AdminerCopy(),
            
        ];

        return new AdminerPlugin($plugins);
    }

    include "./adminer.php";
?>