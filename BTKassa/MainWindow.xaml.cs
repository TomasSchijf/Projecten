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
using System.Windows.Navigation;
using System.Windows.Shapes;

namespace BTKassa
{
    /// <summary>
    /// Interaction logic for MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        public MainWindow()
        {
            InitializeComponent();
        }

        private void btnKlanten_Click(object sender, RoutedEventArgs e)
        {
            Customers wcustomers = new Customers();
            wcustomers.Show();
            this.Close();
        }

        private void btnProducts_Click(object sender, RoutedEventArgs e)
        {
            Products wproducts = new Products();
            wproducts.Show();
            this.Close();
        }

        private void btnBestel_Click(object sender, RoutedEventArgs e)
        {
            Bestelling wbestelling = new Bestelling();
            wbestelling.Show();
            this.Close();
        }

        private void btnPrice_Click(object sender, RoutedEventArgs e)
        {
            Pricehistory wprice = new Pricehistory();
            wprice.Show();
            this.Close();
        }

        private void btnFactuur_Click(object sender, RoutedEventArgs e)
        {
            Factuur wfactuur = new Factuur();
            wfactuur.Show();
            this.Close();
        }
    }
}
