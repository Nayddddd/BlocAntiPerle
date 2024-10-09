<div align="center">
    <h1>BlocAntiPerle</h1>
    <p>Ajouter un/des bloc(s) anti perle</p>
</div>

--------------------

# Installation
1. Vous devez mettre le plugin en [.phar](https://phar-converter.github.io) ou en dossier avec le plugin [devtools](https://poggit.pmmp.io/p/DevTools/) dans le dossier **plugins**

# Configuration:
| **Type**         | **Configuration**          | **Informations**                                                                                       |
|------------------|----------------------------|--------------------------------------------------------------------------------------------------------|
| **__Config__**   | `resources\config.yml`     | Ce fichier de configuration contrôle les blocs anti perle ainsi que d'autres paramètres            |

## Config
```yaml
anti_perle_blocks:
  - "Sponge"
  - "Bedrock"
anti_perle_message: "Vous ne pouvez pas utiliser de perle sur ce type de bloc !"

```
- **anti_perle_blocks** → Blocs qui seront anti perle
- **anti_perle_message** → Message envoyé au joueur lorsqu'il lancera une perle sur un bloc anti perle

# Help :
Si vous avez besoin d'aide, me dm sur discord `.nayd_`
