<div align="center">
    <h1>BlocAntiPerle</h1>
    <p>Se téléporter au spawn</p>
</div>

--------------------

# Installation
1. Vous devez mettre le plugin en [.phar](https://phar-converter.github.io) ou en dossier avec le plugin [devtools](https://poggit.pmmp.io/p/DevTools/) dans le dossier **plugins**

# Configuration:
| **Type**         | **Configuration**          | **Informations**                                                                                       |
|------------------|----------------------------|--------------------------------------------------------------------------------------------------------|
| **__Config__**   | `resources\config.yml`     | Ce fichier de configuration contrôle les coordonnées du spawn ainsi que d'autres paramètres            |

## Config
```yaml
spawn:
  world: "default"
  x: 0
  y: 70
  z: 0
  teleport_message: "Vous avez été téléporté au spawn !"

```
- **world** → Monde dans lequel le joueur va se téléporter
- **x, y, z** → Coordonnées où le joueur va être téléporté
- **teleport_message** → Message envoyé au joueur lors après la téléportation
  
### Commandes : *(plugin.yml)*
| Commande    | Description          | Permission                          |
|-------------|----------------------|-------------------------------------|
| `/spawn` | Se téléporter au spawn | `nayd.spawn` |

# Help :
Si vous avez besoin d'aide, me dm sur discord `.nayd_`
