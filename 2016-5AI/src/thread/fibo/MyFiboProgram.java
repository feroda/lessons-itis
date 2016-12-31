/* Per ogni numero in input calcola la funzione di Fibonacci
 * in un sottothread
 */

import java.net.*;
import java.io.*;

public class MyFiboProgram
{
	public static void main(String[] args)
	{
            Integer arg = null;
            for (int i=0; i<args.length; i++) {
              try {
                arg = new Integer(args[i]);
              } catch (Exception e) {
                System.out.println(e);
              }
              new MyFiboThread(arg);
	      System.out.println("Lanciato thread per calcolare fibonacci(" + arg + ")");
        }

	}
}
