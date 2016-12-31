import java.io.*;
import java.util.*;

public class MyFiboThreadWithLock implements Runnable {

    private Integer pos = new Integer(0);
    private Integer value = new Integer(1);
    private List<Integer> results = new ArrayList<Integer>();
    public Thread t;

    public MyFiboThreadWithLock (int pos, List<Integer> results) {
        this.pos = pos;
        this.results = results;
        t = new Thread(this);
        t.start();
    }

    public void run() {
        // Questo è il calcolo della funzione di Fibonacci.
        // In questo metodo (run()) viene svolto il "lavoro sporco" del Thread.

        if (this.pos >= 2) {
            int a = 1;
            int b = 1;

            for (int i=2; i<=this.pos; i++) {
                this.value = a + b;
                a = b;
                b = this.value;
            }
        }
        String v = this.value.toString();
        String pos = this.pos.toString();
        System.out.println("-> Il valore di Fibonacci alla posizione " + pos + " = " + v);

        // Il risultato viene messo nella lista acceduta con mutua esclusione
        synchronized(this.results) {
            results.add(this.value);
        }
    }
}
