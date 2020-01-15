# SADISTE
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/UNO_Logo.svg/1200px-UNO_Logo.svg.png">

---

<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" width="50"> <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png" width="100"> <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Node.js_logo.svg/1280px-Node.js_logo.svg.png" width="100"> <img src="https://upload.wikimedia.org/wikipedia/en/thumb/6/62/MySQL.svg/1200px-MySQL.svg.png" width="100">

---

### Demo Page
http://sadiste.ddns.net

### Απαιτούμενο λογισμικό
Για να μπορέσετε να τρέξετε το project θα χρειαστείτε:
* Laravel
* PHP
* Node.js
* Mardiadb (Ή οποιαδήποτε άλλη βάση δεδομένων)

### Οδηγίες εγκατάστασης:
* Κατεβάστε τον πηγαίο κώδικα
```bash
git clone https://github.com/iee-ihu-gr-course1941/ADISE19_SADISTE.git
```

* Μετακινηθείτε στον φάκελο ADISE19_SADISTE
```bash
cd ADISE19_SADISTE
```

* Εκτελέστε το αρχείο init.sh
```bash
chmod a+x init.sh && ./init.sh
```

* Ή ακολουθήστε τα παρακάτω βήματα
```bash
cd ADISE19_SADISTE
composer install
npm install
npm run dev
cp .env.example .env
```

### Ρυθμίσεις

* Στο αρχείο .env αλλάξτε τις προεπιλεγμένες ρυθμίσεις.

##### Παράδειγμα
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=root
DB_USERNAME=root
DB_PASSWORD=toor
```

### Εκτέλεση του προγράμματος

* Μεταβείτε στον κατάλογο που βρίσκεται το project
* Ξεκινήστε τον server με τον aritsan
```bash
php artisan serve
```

### Περιγραφή API

#### Login
```
POST /login
```

### Το μοντέλο του παιχνιδιού

#### Attributes
- clockwiseRotation
- stackPlusCards //TODO
- currentPlayer
- playingOrder
- drawDeck
- stackDeck
- usersDecks

#### Functions
- isLegalMove
- nextPlayer
- changeRotation
- draw
- playCard
