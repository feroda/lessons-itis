import java.io.*;

public class MyFiboThread implements Runnable {

    Integer n = new Integer(0);
    Integer value = new Integer(1);

    public MyFiboThread (int n) {
        this.n = n;
        new Thread(this).start();
    }

    public void run() {
        /* Esegui il calcolo della funzione di Fibonacci.
         * Questo è il lavoro del Thread (metodo run())
         */
        if (this.n >= 2) {
            int a = 1;
            int b = 1;

            for (int i=2; i<=this.n; i++) {
                this.value = a + b;
                a = b;
                b = this.value;
            }
        }
        String v = this.value.toString();
        String pos = this.n.toString();
        System.out.println(
		"-> Il valore di Fibonacci alla posizione " 
		+ pos + " = " + v);
    }
}






