# grocery_website
This repository contains a grocery website for the course SOEN 287.

IMPORTANT: Do NOT push directly to the main branch. This can cause merge conflicts which can be very annoying to fix. Instead, work in your own branch and push to that branch, then use the pull request feature on Github and send me a message on Discord. I will merge your changes into main manually.

IMPORTANT: Please be careful when editing styles.css. We all use that file across the entire website. Be careful when deleting or editing things from there, as it can cause merge conflicts on Github. Rebase regularly as you work, in order to get other people's work downloaded and help avoid these types of issues.

If you're new to Github, I recommend downloading Git Bash here https://git-scm.com/downloads and following this tutorial to learn how to use it: https://github.com/firstcontributions/first-contributions

Github is a website that interfaces with Git Bash or other similar software. It allows for cloud storage of our work, easy sharing of changes, and easy introduction of changes and new features, while also providing the ability to go back in our project's history to undo changes in case something goes wrong. The 2 main things we will use in this project are pushing and rebasing. Pushing is when you upload your changes to Github so other people can have access to them (and so that they can be saved and backed-up in case something happens to your computer). Rebasing is when you take changes that other people have uploaded to Github and download them to your computer, so that the changes can appear in your code too. By regularly rebasing, you'll always be working on and editing the most up to date version of the website.

Everybody should work in a branch named after themselves. When working, regularly rebase and especially rebase before pushing your changes to Github. This will update your local repository to reflect the main branch of Github and helps avoid merge conflicts. In other words, new changes from the main branch will be copied into your local work. To rebase for most (all?) computers, navigate to your local branch in Git Bash and run the commands:

git add .<br/>
git commit -m "mesage about what you changed (with quotation marks)"<br/>
git checkout main<br/>
git pull<br/>
git checkout BRANCH_NAME<br/>
git rebase main

When you're ready to push your code to your Github branch (make sure to rebase first), navigate to your local directory in Git Bash and type:

git add .<br/>
git commit -m "mesage about what you changed (with quotation marks)"<br/>
git push origin BRANCH_NAME

Then on the Github website, submit a pull request and message me on Discord so I can merge your changes into main. Don't be afraid to push regularly and have me merge into main, or else other people won't be able to get your changes as they're working.

Here's a very useful Chrome add-on to help with layout and styling: https://chrome.google.com/webstore/detail/wireframe/amchfjeinhflcmbpdgdihhdoogdagcaf?hl=en-GB

Note: If while working you have made some serious error in your code and you want to reset to what's currently saved on Github, you can enter the following commands in Git Bash. Note this will delete ALL changes you have made since the last push to Github. It is a last resort:<br/>
After navigating to your local branch in Git Bash, type:<br/>
git reset --hard origin/branch_name
