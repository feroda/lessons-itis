/* Questo programma restituisce il messaggio ricevuto da un client TCP */


import java.net.*;
import java.io.*;

public class EchoServerSingolaConnessione
{
	public static void main(String args[])
	{
		ServerSocket sSocket;
		Socket connessione;

        // numero di porta scelto a caso
		int porta = 3333;

        //Stream per gestire il flusso in output
		OutputStream out;
		PrintWriter sOUT;

		//Stream per gestire il flusso in input
		InputStream in;
		InputStreamReader input;
		BufferedReader sIN;

		try
		{
			sSocket = new ServerSocket(porta);

			while(true)
			{
				System.out.println("In attesa di connessioni...");
				connessione = sSocket.accept();
				System.out.println("Connessione stabilita.");

                // Inizializza lo stream di input
                in = connessione.getInputStream();
                input = new InputStreamReader(in);
                sIN = new BufferedReader(input);

                // Inizializza lo stream per inviare l'output
				out = connessione.getOutputStream();
				sOUT = new PrintWriter(out);

				// Invia l'informazione al Client
				sOUT.println(sIN.readLine());
				sOUT.close();
				connessione.close();
				System.out.println("Connessione chiusa.");
			}
		}
		catch (IOException e)
		{
			System.err.println(e);
		}
	}
}
