-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 17 juil. 2020 à 12:29
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `base-site-rooting`
--

-- --------------------------------------------------------

--
-- Structure de la table `Article blog`
--

CREATE TABLE `Article blog` (
  `Titre` text NOT NULL,
  `Image` text NOT NULL,
  `Date` date NOT NULL,
  `Auteur` text NOT NULL,
  `Résumé` varchar(300) NOT NULL,
  `Contenu` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Article blog`
--

INSERT INTO `Article blog` (`Titre`, `Image`, `Date`, `Auteur`, `Résumé`, `Contenu`) VALUES
('coronavirus en Bretagne', 'imagearticle3.jpg', '2020-07-02', 'france tv info', 'résumé de l\'article', '32 nouveaux cas en 72 heures\r\n\r\nDepuis la fin du mois de février 325 personnes sont décédées du coronavirus dans les établissements hospitaliers ou les maisons de retraite de la région à cause du coronavirus. Par ailleurs, deux personnes sont toujours en réanimation. Un chiffre stable depuis le 2 juillet.\r\n\r\nD\'autres informations sont en revanche plus inquiétantes. L\'agence régionale de santé, qui ne publie ses bilans que deux fois par semaine, le mardi et le vendredi, depuis le déconfinement, annonce 32 nouveaux cas de coronavirus dans la région depuis le mardi 7 juillet. Onze cas ont été identifiés en Ille-et-Vilaine, dix dans le Finistère, cinq dans le Morbihan. Aucun nouveau cas n\'a été identifié dans les Côtes-d\'Armor où les habitants sont pourtant invités à aller se faire tester. Il faut y ajouter deux personnes ne résidant pas en Bretagne et quatre dont le département de résidence n\'est pas connu. \r\n\r\nIl n\'y avait pas eu autant de cas recensés depuis avril\r\n\r\nLa Bretagne dépasse ainsi les 3.000 cas confirmés depuis le début du décompte à la fin du mois de février. C\'est la première fois depuis la fin du mois d\'avril qu\'autant de cas sont identifiés sur une période de trois ou quatre jours. D\'ordinaire, seuls une dizaine de cas étaient remontés par l\'Agence régionale de santé. Il faudra attendre le nouveau bilan, mardi prochain, afin d\'avoir ou non la confirmation d\'une augmentation importante du nombre de contaminations dans la région. La prudence reste de mise.\r\n'),
('envoutante Bretagne', 'imagearticle2.jpg', '2020-07-07', 'my atlas', 'résumé article', 'En route\r\nMercredi 19 octobre 2016. La météo annonce une vague de mauvais temps sur toute la France d\'ici 4 jours... On avait prévu 1 semaine itinérante en Bretagne, mais vu la météo, on hésite. De toute façon, il fera mauvais partout alors on tente ! Mais il ne faut pas perdre une minute. Les vacances scolaires commencent à 12h. Nous mettons le cap à 14h30 pour le Mont Saint Michel.\r\n\r\nJuste 900 km... et la France à traverser ! 10 heures de trajet sans les pauses.\r\n\r\n\r\n\r\n\r\n\r\nPetite pause sur une aire d\'autoroute originale en Auvergne \r\nLa route est longue. On sort de l\'autoroute vers 23 heures pour chercher un endroit où se poser avec notre fourgon. Ce sera un parking de magasin de bricolage bien tranquille. Grignotage express et au lit. On n\'est pas encore arrivés !\r\n\r\n Commenter cette étape\r\nJ2\r\n Le Mont-Saint-Michel\r\nLe Mont Saint Michel\r\nLever 8h30. C\'est quand même les vacances ! Après avoir replié les lits du fourgon et pris notre petit déjeuner, nous reprenons la route. Plus qu\'1 heure ! Nous traversons par endroit des nappes de brouillard assez denses et craignons de ne pas voir le Mont St Michel. Mais soudain, il nous apparaît au loin tel une pyramide touchant le ciel.\r\n\r\n\r\n\r\nNous nous garons sur le parking du site situé à 3 km du Mont. Pour s\'y rendre, 3 solutions: des navettes gratuites, des calèches payantes ou à pieds. Nous optons pour cette solution, 50 minutes de marche avec les pauses photos, sur un chemin très agréable, qui nous permet une découverte progressive.\r\n\r\n\r\n\r\n\r\n\r\n\r\nLe Mont Saint-Michel a la particularité d’être érigé sur un îlot rocheux, entouré d\'une magnifique baie ouverte sur la Manche, théâtre des plus grandes marées d\'Europe continentale (15 mètres d\'amplitude lors des grandes marées).\r\n\r\n\r\n\r\nSu\r\n'),
('Que faire en Bretagne ?', 'imagearticle4.jpg', '2020-07-07', 'les globe blogueurs', 'résumé article', 'Que faire en Bretagne côté plages ?\r\nS’il y a bien une région de France qui offre une énorme diversité de plages, c’est bien la Bretagne. Que ce soient de plages de sable blanc et eau azur propices au farniente, des plages désertes, des plages idéales pour la pêche à pied, pour le surf ou le windsurf, des petites criques cachées… Il y en a pour tous les goûts !\r\nPlutôt que dresser une liste complète des plages à visiter en Bretagne, je vous livre ma sélection montrant leur diversité, mes petits coins adorés pour se prélasser ou s’agiter sur les plages bretonnes, en fonction de vos centres d’intérêt.\r\nLa plage de la pointe de la Torche pour des sensations fortes\r\nLa plage reine pour s’adonner aux sports nautiques mus par le vent et les sports de glisse. Un des plus beaux spots de France pour le kite surf, avec une ambiance bien particulière et un cadre somptueux. D’ailleurs, même sans mettre un pied dans l’eau, une balade à la pointe de la Torche en elle même vaut la visite.\r\npointe de la torche\r\nPointe de la torche\r\nLa plage Tahiti à Carantec, pour s’échapper vers les tropiques\r\nSans doute l’une des plages les plus réputées de Bretagne, et pour cause, son nom parle de lui même. Sable blanc et eau cristalline. Que demander de plus ?\r\nPlage de Raguenez à Nevez'),
('le Finistère Sud de plage en manoirs', 'imagearticle2.jpg', '2020-07-11', 'onedayonetravel', 'résumé', 'Nous avons hâte d’explorer le Finistère Sud et de partager notre séjour avec toi dans ce billet de notre blog voyage OneDayOneTravel au travers de nos récit, conseils et vidéo. De quoi rêver, t’inspirer et te donner les meilleurs conseils pour t’aider à organiser ton futur voyage dans le Finistère Sud.\r\n\r\nAu fait, nous c’est Franck et Richard. Nous sommes blogueurs voyageurs et explorons le monde en partageant nos récits inspirants, itinéraires, city guides, conseils pratiques et bons plans alternatifs avec vous depuis 2008 sur OneDayOneTravel. En savoir plus\r\n\r\nAu programme de ce séjour aux airs du bout du monde : plages paradisiaques, mer turquoise, visite des villages typiques du département breton et 3 hébergements de caractère que nous avons réservés sur le site Millevista. Millevista est un site de réservations d’hôtels, villas et restaurants qui a la bonne idée de ne proposer que des établissements avec vue et/ou dans des cadres uniques. Et ça, on aime beaucoup !\r\n\r\n\r\n \r\nFinistere Bretagne Millevista manoir soleil\r\nTout commence par une journée de septembre. La pluie nous accompagne pendant nos 6 heures de route. Ça ne démarre pas fort. Une fois arrivés en Finistère Sud, le temps se lève laissant apparaître de belles éclaircies. Quelle joie et quel bonheur de profiter de la mer et de son air vivifiant dès notre arrivée.\r\n\r\nNos 3 jours en Bretagne s’annonce bien !'),
('Vacances: la Bretagne a la côte', 'imagearticle5.jpg', '2020-07-13', 'france tv info', 'résumé', 'Un simple coup d\'œil aux plaques d\'immatriculation le confirme : les touristes sont bel et bien arrivés et ils sont venus en nombre. Au guichet des vedettes de l\'île de Batz, une file d\'attente interminable se profile. Les touristes doivent patienter 1 heure et demi avant de pouvoir embarquer. Même ceux qui habitent sur place depuis trente ans n\'en reviennent pas. \"Je n\'ai jamais vu autant de monde faire la queue pour aller à l\'île de Batz. C\'est pratiquement le double de ce qu\'on voit un jour de fête\", affirme un Roscovite.\r\n\r\nDes Bretons parmi les touriste\r\n\r\nLes vedettes s\'activent dans un ballet incessant pour déposer en quelques heures les passagers sur cette île de 300 habitants. Parmi eux, une famille costarmoricaine a préféré repenser complètement ses vacances, Covid oblige. \"Vu les circonstances, on a préféré jouer local en se disant \'s\'il se passe quelque chose, au moins on est plus près\'\", explique la mère. Les vacances tout de suite et pas trop loin de chez soi, ce sera peut-être le signe distinctif de cet été 2020. L\'île de Batz en solution de rechange aux Caraïbes ? Et pourquoi pas. \r\n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
