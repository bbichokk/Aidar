package equipo;

public class ejercicio1 {

	public static void main(String[] args) {
		
		int cats=20;
		int ratones=3500;
		int dias=0;
		
		do {
			ratones = ratones - cats;
			dias++;
			
			
			if (dias == 200 || dias == 400)
			{
				cats = cats*4;
			}
			
			if(dias == 100 || dias == 200 || dias == 300 || dias == 400 || dias == 500)
			{
				System.out.println("Han pasado "+ dias +"dias");
				System.out.println("Hay "+ ratones +"ratones");
				System.out.println("Hay "+ cats +"gatos");
				
				ratones = ratones*2;
			}	
		}
		
		while (ratones != 0);
		
		System.out.println("A los "+ dias +"dias ya no quedan ratones");
		
		
		

	}

}
