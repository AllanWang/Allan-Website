<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$page_title = "Git Cheat Sheet";
$page_description = "List of common git commands";
$navFrom = 'cn_git';
//$navTo = 'commons';
$theme_color = "#4078c0"; //github blue

phpHeader(); ?>
<body>

<?php
phpNav(); ?>

<main>

    <div class="container">
        <div class="section">
            <div class="row" id="commons">
                <h3 class="header center">Git Cheat Sheet</h3>
                <h6 class="center">
                    <?php
                    inlineBullets(array(
                        "Git Download" => "https://git-scm.com/downloads",
                        "Sample Android .gitignore" => ".gitignore"
                    ));
                    ?>
                </h6>
                <table class="light h5 highlight">
                    <?php

                    table_header('Core');
                    table('git init', 'initializes .git');
                    table('git add -A', 'adds all the git files');
                    table("git commit -m '[message]'", 'creates a commit with a message (message is mandatory)');
                    table('git push origin master', 'pushes to origin');
                    table('git pull origin master', 'pulls from origin');

                    table_header('Forceful Actions');
                    table('git push - f origin master', 'force pushes to origin (remote will be exactly like the origin, changes there will be lost)');
                    table('git pull -f origin master', 'force pull from origin');
                    table('git reset --hard HEAD~[number]', 'will remove the latest [number] commits (ie 1 will remove 1 commit) permanently');

                    table_header('Remote');
                    table('git remote -v', 'view existing remotes');
                    table('git remote add [name] [url] ', 'add new remote with given url');
                    table('git remote rm [name]', 'remove remote');
                    table('git remote set-url [name] [url]', 'overrides current url for existing remote');
                    table('git remote set-url --add --push [name] [url]', 'adds new push url to existing remote (one [name] can have multiple [url]s)');

                    table_header('Other');
                    table('git clone [url]', 'clones the git url to local');
                    table('git status', 'get some info on the file changes');
                    table('git diff', 'view merge issues');
                    table('git tag [tag] [commitID]', 'tag a specific commit');

                    table_header('Aliases', 'Custom Commands');
                    table('git config --global alias.cmp \'!f() { git add -A && git commit -m "$*" && git push origin master; }; f\'', 'git cmp [message] will add all changes, commit that message, and push it (cmp = commit merge push)');

                    table_header('Pull Issues', 'Solution');
                    table('Your local changes to the following files would be overwritten by merge', 'Add all your files and commit it; you can pull again afterwards');
                    table('# Please enter a commit message to explain why this merge is necessary', 'Press Insert to toggle between insert and replace in the editor<br/>Press esc to exit to a command<br/>While in the command section, type ":wq" and press enter to save and exit.');
                    table('Automatic merge failed; fix conflicts and then commit the result.', 'Search all your files for "<<<" or ">>>"<br/>All conflicted lines will be encapsulated in those symbols; fix them, add all files, then commit again to resolve it');
                    ?>
                </table>

            </div>
        </div>
    </div>
</main>
<?php phpFooter(); ?>
</body>

</html>