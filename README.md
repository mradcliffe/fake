# Fake.php

This does nothing. Do not use it. It is terrible.

Ok, actually this is just for some Git demonstrations.


## Git stuff

- Look at git history via GitX, TortoiseGit, or `git --log --graph --decorate --color`
- Go through some merge / rebase work flows with `phpunit-initial` and `improve-docs`.

### Get a branch up-to-date with master.

#### Rebase

This will change history if you need to modify something that doesn't apply cleanly. You can easily fall into the trap of applying the "same commit" over and over. Rebase interactive will help with this.

- `git checkout phpunit-initial`
- `git rebase origin/master`
   - Resolve conflicts.
   - `git add FILE`
   - `git rebase --continue`
- `git rebase origin/phpunit-initial`

#### Merge

This will put nasty merge conflicts in, but is easier. [The problem with merge commits](https://sandofsky.com/blog/git-workflow.html)

- `git checkout phpunit-initial`
- `git merge origin/master`
   - Resolve conflicts, commit.

### Get things back into master.

It's a good idea to do the above, get branch up-to-date with master, before doing this step.

#### Rebase

- `git checkout master`
- `git rebase -i phpunit-initial`
   - cherry pick if necessary, but this can be dangerous. See note about rebase above.
- `git rebase origin/master`

#### Merge

- `git checkout master`
- `git merge --ff-only phpunit-initial`
   - OR leave nasty merge commits, but that shouldn't be necessary if the branch can be applied cleanly.
- `git merge --no-ff phpunit-initial`

