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
    /// Interaction logic for FoutScherm.xaml
    /// </summary>
    public partial class FoutScherm : Window
    {
        public FoutScherm()
        {
            InitializeComponent();
        }

        private void btnVolgende_Click(object sender, RoutedEventArgs e)
        {
            this.Close();
        }
    }
}
