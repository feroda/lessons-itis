/* Svolgimento es. 1 pag. 154
 * Tecnologie e progettazione di sistemi informatici e di telecomunicazioni
 * per la classe 5
 *
 * su base fornita da Simone Guion - 5A
 */

import java.net.*;
import java.io.*;

public class ServerBiglietto
{
	public static void main(String args[])
	{
		ServerSocket sSocket;
		Socket connessione;

        // numero di porta scelto a caso
		int porta = 3333;
        // inizializzazione del contatore per il biglietto
		int n = 1;

		/* Esempio di inizializzazione di bind (collegamento)
         * del server solo su indirizzo IP locale.
         * Se lo uso potrò contattare il server solo sull'indirizzo del bind

        byte[] ipAddr = new byte[]{127, 0, 0, 1};
        InetAddress bindIp = null;

        try {
            bindIp = InetAddress.getByAddress(ipAddr);
        } catch (UnknownHostException e) {
            System.err.println(e);
        }

		*/

        //Stream per gestire il flusso in output
		OutputStream out;
		PrintWriter sOUT;

		try
		{
			sSocket = new ServerSocket(porta);
            // la riga di codice commentata mi serve
            // se uso l'IP per il bind. In quel caso devo passare 3 parametri
			// sSocket = new ServerSocket(porta, 10, bindIp);
            // e, come detto sopra potrò raggiungere il servizio solo
            // sull'IP cui faccio il bind

			while(true)
			{
				System.out.println("In attesa di connessioni...");
				connessione = sSocket.accept();
				System.out.println("Connessione stabilita.");

                // Inizializza lo stream per inviare l'output
				out = connessione.getOutputStream();
				sOUT = new PrintWriter(out);

				// Invia l'informazione al Client
				String numero = Integer.toString(n);
				sOUT.println(numero);
				sOUT.close();
				connessione.close();
				System.out.println("Connessione chiusa.");
				n += 1;
			}
		}
		catch (IOException e)
		{
			System.err.println(e);
		}
	}
}
