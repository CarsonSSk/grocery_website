# grocery_website
This repository contains a grocery website for the course SOEN 287.

IMPORTANT: Do NOT push directly to the main branch. This can cause merge conflicts which can be very annoying to fix. Instead, work in your own branch and push to that branch, then use the pull request feature on Github and send me a message on Discord. I will merge your changes into main manually.

IMPORTANT: Please be careful when editing styles.css. We all use that file across the entire website. Be careful when deleting or editing things from there, as it can cause merge conflicts on Github. Rebase regularly as you work, in order to get other people's work downloaded and help avoid these types of issues.

If you're new to Github, I recommend downloading Git Bash and following this tutorial to learn how to use it: https://github.com/firstcontributions/first-contributions

Everybody should work in a branch named after themselves. When working, regularly rebase and especially rebase before pushing your changes to Github. This will update your local repository to reflect the main branch of Github and helps avoid merge conflicts. In other words, new changes from the main branch will be copied into your local work. To rebase for most (all?) computers, navigate to your local repository in Git Bash and run the commands:

git checkout main<br/>
git pull<br/>
git checkout BRANCH_NAME<br/>
git rebase main

When you're ready to push your code to your Github branch (make sure to rebase first), navigate to your local directory in Git Bash and type:

git add .<br/>
git commit -m "mesage about what you changed (with quotation marks)"<br/>
git push origin BRANCH_NAME

Then on the Github website, submit a pull request and message me on Discord so I can merge your changes into main.
