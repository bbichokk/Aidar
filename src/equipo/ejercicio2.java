package equipo;

import java.util.Scanner;

public class ejercicio2 {

	public static void mostrarMenu(String[] nombres, int[]telefonos) {
		Scanner sc = new Scanner(System.in);
		int opcion;
		
		
		System.out.println("cuantos animales");
		int cantidad = sc.nextInt();
		
		for(int i=0;i< cantidad;i++) {
			
			System.out.println("Poner nombre" +cantidad +" :");
			nombres[cantidad] = sc.nextLine();
			
			for(int j=0;j< cantidad;j++) {
				
			}
		}
	

		do {
			System.out.println("Bienvenido a mi menu.(Elige una opción 1-4)");
			System.out.println("1. añadir animal");
			System.out.println("2. eleminar");
			System.out.println("3. mostrar") ; 
			System.out.println("4. salir") ; 

			opcion = sc.nextInt();

			switch (opcion) {
			case 1:
				añadir();
				break;

			case 2:
					eleminar();
				break;	
				
			case 3:
					mostrar();
			break;	

		

			case 4:
				System.out.println("Saliendo...");
				sc.close();
				break;	

			default:
				System.out.println("Valor introducido incorrecto.");
				break;
			}

		}
		while( opcion != 4 );

	}

	private static void mostrar() {
		// TODO Auto-generated method stub
		
	}

	private static void eleminar() {
		// TODO Auto-generated method stub
		
	}

	public static void añadir() {
		int numeros[]=new int[20];
		int nombres[]=new int[20];
		System.out.println("dime el nombre:");
		Scanner sc = null;
		String nombre=sc.nextLine();
		}

}
