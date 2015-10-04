package junit;

import belatrix_operations.Operacion;
import java.util.ArrayList;
import java.util.List;
import org.junit.After;
import org.junit.Before;
import org.junit.Test;
import static org.junit.Assert.*;

/**
 *
 * @author DIEGO MATOS BALDEON
 */
public class JOperation {

    public Operacion op;

    public JOperation() {
    }

    @Before
    public void setUp() {
        
    }

    @After
    public void tearDown() {
    }

    @Test
    public void testSuma() {
        System.out.println("PROBANDO SUMA CON BEFORE");
        op = new Operacion();
        List<Float> numeroList = new ArrayList<Float>();
        List<String> operacionList = new ArrayList<String>();
        numeroList.add(new Float(2));
        numeroList.add(new Float(3));
        operacionList.add("+");

        double realValue = op.calcularResultado(numeroList, operacionList);
        double expectedValue = 5;
        //METODO CON assertEquals
        assertEquals(expectedValue, realValue, 0.01);
    }

    @Test
    public void testDivision() {
        System.out.println("PROBANDO DIVISION CON TEST");
        op = new Operacion();
        List<Float> numeroList = new ArrayList<Float>();
        List<String> operacionList = new ArrayList<String>();
        numeroList.add(new Float(6));
        numeroList.add(new Float(2));
        numeroList.add(new Float(2));

        operacionList.add("/");
        operacionList.add("/");

        double realValue = op.calcularResultado(numeroList, operacionList);
         //METODO CON assertTrue
        assertTrue(realValue == 1.5);
    }

    @Test
    public void testResta() {
        System.out.println("PROBANDO RESTA CON TEST");
        op = new Operacion();
        List<Float> numeroList = new ArrayList<Float>();
        List<String> operacionList = new ArrayList<String>();
        numeroList.add(new Float(6));
        numeroList.add(new Float(2));
        numeroList.add(new Float(2));

        operacionList.add("-");
        operacionList.add("-");

        double realValue = op.calcularResultado(numeroList, operacionList);
        double expectedValue = 2;
        assertTrue(realValue == 2);
    }

    @Test
    public void testMulti() {
        System.out.println("PROBANDO MULTIPLICACION CON TEST");
        op = new Operacion();
        List<Float> numeroList = new ArrayList<Float>();
        List<String> operacionList = new ArrayList<String>();
        numeroList.add(new Float(6));
        numeroList.add(new Float(2));
        numeroList.add(new Float(2));

        operacionList.add("*");
        operacionList.add("*");

        double realValue = op.calcularResultado(numeroList, operacionList);
        assertTrue(realValue == 24);
    }

}
