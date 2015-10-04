/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import java.math.BigDecimal;
import java.util.List;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.OneToMany;
import javax.persistence.Table;
import javax.xml.bind.annotation.XmlRootElement;
import javax.xml.bind.annotation.XmlTransient;

/**
 *
 * @author DIEGO
 */
@Entity
@Table(name = "SIPRE_COSTO_PROCESO")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreCostoProceso.findAll", query = "SELECT s FROM SipreCostoProceso s")})
public class SipreCostoProceso implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "CCP_CODIGO")
    private String ccpCodigo;
    // @Max(value=?)  @Min(value=?)//if you know range of your decimal fields consider using these annotations to enforce field validation
    @Column(name = "NCP_MONTO")
    private BigDecimal ncpMonto;
    @OneToMany(mappedBy = "ccpCodigo")
    private List<SipreEntidadCrediticia> sipreEntidadCrediticiaList;

    public SipreCostoProceso() {
    }

    public SipreCostoProceso(String ccpCodigo) {
        this.ccpCodigo = ccpCodigo;
    }

    public String getCcpCodigo() {
        return ccpCodigo;
    }

    public void setCcpCodigo(String ccpCodigo) {
        this.ccpCodigo = ccpCodigo;
    }

    public BigDecimal getNcpMonto() {
        return ncpMonto;
    }

    public void setNcpMonto(BigDecimal ncpMonto) {
        this.ncpMonto = ncpMonto;
    }

    @XmlTransient
    public List<SipreEntidadCrediticia> getSipreEntidadCrediticiaList() {
        return sipreEntidadCrediticiaList;
    }

    public void setSipreEntidadCrediticiaList(List<SipreEntidadCrediticia> sipreEntidadCrediticiaList) {
        this.sipreEntidadCrediticiaList = sipreEntidadCrediticiaList;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (ccpCodigo != null ? ccpCodigo.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreCostoProceso)) {
            return false;
        }
        SipreCostoProceso other = (SipreCostoProceso) object;
        if ((this.ccpCodigo == null && other.ccpCodigo != null) || (this.ccpCodigo != null && !this.ccpCodigo.equals(other.ccpCodigo))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreCostoProceso[ ccpCodigo=" + ccpCodigo + " ]";
    }
    
}
