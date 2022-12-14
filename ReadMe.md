# le Design Pattern   Issues Tracking avec GitHub

## Apprendre le Design Pattern
Réaliser les exercises sur  [designpatternsphp.readthedocs.io](https://designpatternsphp.readthedocs.io/en/latest/Creational/Prototype/README.html/).

## Apprendre le Issues Tracking avec GitHub

### create un repository à partir d'un repository local
#### Comment changer le nom de la branche principale Master en Main

1. git branch -m master main
2. git push -u origin main
3. Change the new branch name in the repository host
4. git push origin --delete master

#### comment travailler avec le Pull Request
1. Créer une nouvelle branche : my_patch1 sur Github.com
2. En local, lancer la commande git pull afin de voir cette branche.
3. Basculer cette branche localement et pointer les modifications vers la branche distance
```bash
git chekout my_patch1
```
Commit tous les changement et mettre à jour la branche distante

Comment faire pour pointer la branche locale au à la branche distante.

```bash
git push --set-upstream origin my_patch1
git push --set-upstream origin install_super_linter
```

#### Comment merger

* Step 1: Clone the repository or update your local repository with the latest changes.
```bash
git pull origin main
```
* Step 2: Switch to the base branch of the pull request.
```bash
git checkout main
```
* Step 3: Merge the head branch into the base branch.
```bash
git merge my_patch1
```
* Step 4: Push the changes.
```bash
git push -u origin main
```

### Comment desactiver un Workflow dans GitHub.
Allez sur cette page [Disabling and enabling a workflow](https://docs.github.com/en/actions/managing-workflow-runs/disabling-and-enabling-a-workflow)

### Comment utiliser PhpSpan
[Suivre ce lien ](https://phpstan.org/user-guide/getting-started)
Installation :
```
composer require --dev phpstan/phpstan
```
Utilisation
```
vendor/bin/phpstan analyse src tests
```
