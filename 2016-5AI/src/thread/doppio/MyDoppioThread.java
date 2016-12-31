import java.io.*;
import java.net.*;

public class MyDoppioThread implements Runnable {

  Integer num = new Integer(0);
	
  public MyDoppioThread(int num) {
	this.num = num;
	new Thread(this).start();
  }

  public void run() {
    System.out.println(
	"Doppio di " + this.num + " = " + this.num*2);
  }
}

