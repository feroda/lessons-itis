/* Il programma prende in input una serie di numeri interi
 * e per ognuno di essi calcola il valore di Fibonacci in un sottothread.
 *
 * Ogni Thread scrive i risultati in una lista e il programma principale li visualizza.
 *
 * ATTENZIONE: la lista deve essere acceduta con mutua esclusione!
 * E quindi ci bisogna racchiudere le operazioni con la primitiva Java `synchronized()`
 * V. implementazione MyFiboThreadWithLock.java
 */
import java.net.*;
import java.io.*;
import java.util.*;

public class MyFiboProgramWithLock
{

	public static void main(String[] args)
	{
        Integer arg = null;
        List<Integer> results = new ArrayList<Integer>();
        List<MyFiboThreadWithLock> workers = new ArrayList<MyFiboThreadWithLock>();

        for (int i=0; i<args.length; i++) {
            try {
                arg = new Integer(args[i]);
            } catch (Exception e) {
                System.out.println(e);
            }
            workers.add(new MyFiboThreadWithLock(arg, results));
			System.out.println("Lanciato thread per calcolare fibonacci(" + arg + ")");

        }

        for (int i=0; i<workers.size(); i++) {
            try {
                workers.get(i).t.join();
            } catch (InterruptedException e) {
                System.out.println("Thread " + i + " interrotto.");
            }
        }
        System.out.println("I risultati calcolati sono " + results.toString());
	}
}
