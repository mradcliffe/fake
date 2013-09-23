# Fake.php

This does nothing. Do not use it. It is terrible.

Ok, actually this is just for some Git demonstrations.



## Stuff

- Look at each step in GitX or some GUI git program to see what it does.
- Go through this using merge first, then wipe out / re-clone, and do with rebase.

### Developer 1

- Merge phpunit-initial branch into master.

1. Confirm that topic branch is up-to-date.
   - `git rebase origin/master`
   - OR `git merge --no-ff origin/master` OR `git merge --ff-only origin/master`
2. Checkout master branch.
3. Merge phpunit-initial into master or rebase.
   - `git merge phpunit-initial`
   - `git rebase phpunit-initial`, `git rebase origin/master`

### Developer 2

- Merge improve-docs branch into master.

1. Confirm that topic branch is up-to-date.
   - `git rebase origin/master`
   - OR `git merge --no-ff origin/master` OR `git merge --ff-only origin/master`
   - Note: this will cause merge conflicts. Resl
      - Resolve merge conflicts by generally keeping HEAD. Be smart about it. Run `php -l` to make sure everything still runs.
2. Checkout master branch.
3. Merge phpunit-initial into master or rebase.
   - `git merge phpunit-initial`
   - `git rebase phpunit-initial`, `git rebase origin/master`
