# Apprendre le Design Pattern

# Apprendre le Issues Tracking avec Github

## create un repository à partir d'un repository local.
### Comment changer le nom de la branche principale Master en Main

1. git branch -m master main
2. git push -u origin main
3. Change the new branch name in the repo host
4. git push origin --delete master

# comment travailler un Pull Request
1. Créer une nouvelle branche : my_patch1 sur Github.com
2. En local, lancer la commande git pull afin de voir cette branche.
3. Basculer cette branche localement et pointer les modifications vers la branche distance
    ````
    git push --set-upstream origin my_patch1
    ````