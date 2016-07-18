import java.applet.*;
import java.awt.*;

/**
* This is the famous program for Devops
* Applet that prints out "Build ok" to the screen
*
*
* @author Timspirit
*
*/

public class devops extends Applet
{
   public void paint (Graphics g)
   {
      g.drawString ("Starting deployment from the post-action... Finished: SUCCESS", 25, 70);
   }
}