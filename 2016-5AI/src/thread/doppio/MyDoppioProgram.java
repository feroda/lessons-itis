import java.io.*;
import java.net.*;

public class MyDoppioProgram {

	public static void main(String[] args)
	{
	  for (int i=0; i<args.length; i++) {		
		Integer num = new Integer(args[i]);
		new MyDoppioThread(num);
	  }
	}
}
