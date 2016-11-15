<!DOCTYPE html>
<html lang="en">

<?php
include("../../include/config.php");
$n_key = "Git";
$page_title = "$n_key Cheat Sheet";
$page_description = "List of common git commands";
$navFrom = 'n_git';
//$navTo = 'commons';
$theme_color = "#4078c0"; //github blue

phpHeader(); ?>
<body>

<?php mathJax();
phpNav(); ?>

<main>

    <div class="container">
        <div class="section">
            <div class="row" id="commons">
                <h3 class="header center">Git Cheat Sheet</h3>
                <h6 class="center">Sample Android .gitignore can be found <a href=".gitignore" target="_blank">here</a></h6>
                <table class="light h5 highlight">
                    <?php

                    table_header('Core');
                    table('git init', 'initializes .git');
                    table('git add -A', 'adds all the git files');
                    table('git commit -m [message]', 'creates a commit with a message (message is mandatory)');
                    table('git push origin master', 'pushes to origin');
                    table('git pull origin master', 'pulls from origin');

                    table_header('Forceful Actions');
                    table('git push - f origin master', 'force pushes to origin (remote will be exactly like the origin, changes there will be lost');
                    table('git pull -f origin master', 'force pull from origin');
                    table('git reset--hard HEAD~[number]', 'will remove the latest [number] commits (ie 1 will remove 1 commit) permanently');

                    table_header('Remote');
                    table('git remote -v', 'view existing remotes');
                    table('git remote add [name] [url] ', 'add new remote with given url');
                    table('git remote rm [name]', 'remove remote');
                    table('git remote set - url--add--push [name] [url]', 'adds new push url to existing remote (one [name] can have multiple [url]s)');

                    table_header('Other');
                    table('git clone [url]', 'clones the git url to local');
                    table('git status', 'get some info on the file changes');
                    table('git diff', 'view merge issues');
                    table('git tag [tag] [commitID]', 'tag a specific commit');

                    table_header('Aliases', 'Custom Commands');
                    table('git config --global alias.cmp \'!f() { git add -A && git commit -m "$*" && git push origin master; }; f\'', 'git cmp [message] will add all changes, commit that message, and push it (cmp = commit merge push)');
                    ?>
                </table>

            </div>
        </div>
    </div>
</main>
<?php phpFooter(); ?>
</body>

</html>
