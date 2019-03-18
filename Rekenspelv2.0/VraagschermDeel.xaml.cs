using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Shapes;

namespace Rekenspelv2._0
{
    /// <summary>
    /// Interaction logic for VraagschermDeel.xaml
    /// </summary>
    public partial class VraagschermDeel : Window
    {
        int aantalSommen = 0;
        int iUitkomst;
        int goed = 0;
        int fout = 0;
        public VraagschermDeel()
        {
            InitializeComponent();
            createNumber();

        }
        public void createNumber()
        {
            if (aantalSommen < 5)

            {
                int iGetal1 = 0;
                int iGetal2 = 0;

                txtAntwoord.Clear();

                Random rnd = new Random();
                iGetal2 = rnd.Next(1, 10);
                iGetal1 = rnd.Next(1, 10) * iGetal2; 

                lbGetal1.Content = null;
                lbGetal2.Content = null;

                lbGetal1.Content = iGetal1.ToString();
                lbGetal2.Content = iGetal2.ToString();

                iUitkomst = iGetal1 / iGetal2;
            }
            else
            {
                Aantalgoedscherm score = new Aantalgoedscherm(goed);
                score.Show();
                this.Close();

            }
        }


        private void txtAntwoord_TextChanged(object sender, TextChangedEventArgs e)
        {

        }

        private void btnAntwoord_Click(object sender, RoutedEventArgs e)
        { 
            if (string.IsNullOrEmpty(txtAntwoord.Text))
            {
                MessageBox.Show("Vul iets in");
                return;
            }
            string sAntwoord = txtAntwoord.Text;
            int iAntwoord = Convert.ToInt32(sAntwoord);
            
            {
                if (iAntwoord == iUitkomst)
                {
                    GoedScherm waddwindow = new GoedScherm();
                    waddwindow.Show();

                    goed++;
                }
                else
                {
                    FoutScherm waddwindow = new FoutScherm();
                    waddwindow.Show();
                    fout++;
                }
                aantalSommen++;

                createNumber();
            }
        }
    }
}
