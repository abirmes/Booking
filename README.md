

## 19/2


## difference entre get et find



- get retournera toujours quelque chose, find pourrait ne donner aucun résultat.
- get retourne error s'il ne trouve aucun résultat,find retourne null.
- nous mettons get quand nous avons sur que se résultat exist.
 


## difference entre create and new + save:



- create creer des multiples objets dans une seule command
- save retourne true or false, si l'objet est bien enregistree dans database ou non , create retourne le model quelque soit l'objet est successfully enregistree dans database ou pas, l'instruction apres create sera toujours exécutée même si l'objet échoue aux validations et n'est pas enregistré. 
- save() est utilisee pour l'enregistrement dans database si lobjet n'exists pas , et le update s'il exists





