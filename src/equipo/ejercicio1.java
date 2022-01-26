package equipo;

public class ejercicio1 {

	public static void main(String[] args) {
		
		int gatos=20;
		int ratones=3500;
		int dias=0;
		
		do {
			ratones = ratones - gatos;
			dias++;
			
			
			if (dias == 200 || dias == 400)
			{
				gatos = gatos*4;
			}
			
			if(dias == 100 || dias == 200 || dias == 300 || dias == 400 || dias == 500)
			{
				System.out.println("Han pasado "+ dias +"dias");
				System.out.println("Hay "+ ratones +"ratones");
				System.out.println("Hay "+ gatos +"gatos");
				
				ratones = ratones*2;
			}	
		}
		
		while (ratones != 0);
		
		System.out.println("A los "+ dias +"dias ya no quedan ratones");
		
		
		

	}

}
