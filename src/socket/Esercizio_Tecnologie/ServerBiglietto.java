import java.net.*;
import java.io.*;

public class ServerBiglietto
{
	public static void main(String args[])
	{
		ServerSocket sSocket;
		Socket connessione;
		int porta = 3333;
		int n = 1;
		byte[] ipAddr = new byte[]{127, 0, 0, 1};
		InetAddress bindIp = InetAddress.getByAddress(ipAddr);

		//Stream per gestire il flusso in output
		OutputStream out;
		PrintWriter sOUT;

		try
		{
			sSocket = new ServerSocket(porta, 10, bindIp);
			while(true)
			{
				System.out.println("In attesa di connessioni...");
				connessione = sSocket.accept();
				System.out.println("Connessione stabilita.");
				out = connessione.getOutputStream();
				sOUT = new PrintWriter(out);
				//Invia l'informazione al Client
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
