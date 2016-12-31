import java.net.*;
import java.io.*;

public class ClientBiglietto
{
	public static void main(String[] args)
	{
		Socket connessione;

		//parametri di connessione
		String server = "localhost"; // = 127.0.0.1
		int porta = 3333;
		//Stream per gestire il flusso in input
		InputStream in;
		InputStreamReader input;
		BufferedReader sIN;

		try
		{
			connessione = new Socket(server, porta);
			System.out.println("Connessione aperta.");
			in = connessione.getInputStream();
			// Inizializza lo stream di input
            input = new InputStreamReader(in);
			sIN = new BufferedReader(input);
			// Riceve i dati dal server
			String num = sIN.readLine();
			System.out.println("Il tuo numero e': " + num);
			sIN.close();
			connessione.close();
			System.out.println("Connessione chiusa.");
		}
		catch (IOException e)
		{
			System.err.println(e);
		}
	}
}
