--
-- Database: amm15_ripoliEmanuela
--

use amm15_ripoliEmanuela;

-- --------------------------------------------------------

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`id`, `username`, `password`, `livello`) VALUES
(1, 'amministratore', 'e792cd9665119b1244e8afcf36fb5f48', 'admin'),
(2, 'utente', '3ce98305181b1bac59d024a49b0ffd73', 'user');

-- --------------------------------------------------------

--
-- Dump dei dati per la tabella `ordini`
--

INSERT INTO `ordini` (`idOrdine`, `Nome`, `Cognome`, `email`, `telefono`, `categoria`, `articolo`, `quantita`) VALUES
(1, 'Luca', 'Rossi', 'lucarossi@unica.it', 3400011222, 'libro', 'La strategia di Bosch', 2),
(2, 'Marco', 'Verdi', 'marco_99@gmail.com', 3420000004, 'musica', 'On', 1);

