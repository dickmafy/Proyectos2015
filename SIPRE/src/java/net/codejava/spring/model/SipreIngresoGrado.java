/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import java.math.BigDecimal;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.EmbeddedId;
import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Table;
import javax.xml.bind.annotation.XmlRootElement;

/**
 *
 * @author DIEGO
 */
@Entity
@Table(name = "SIPRE_INGRESO_GRADO")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreIngresoGrado.findAll", query = "SELECT s FROM SipreIngresoGrado s")})
public class SipreIngresoGrado implements Serializable {
    private static final long serialVersionUID = 1L;
    @EmbeddedId
    protected SipreIngresoGradoPK sipreIngresoGradoPK;
    // @Max(value=?)  @Min(value=?)//if you know range of your decimal fields consider using these annotations to enforce field validation
    @Column(name = "NIG_MONTO")
    private BigDecimal nigMonto;
    @Column(name = "CIG_IND_INGRESO")
    private Character cigIndIngreso;
    @Column(name = "CIG_IND_CALCULO")
    private Character cigIndCalculo;
    @Basic(optional = false)
    @Column(name = "CIG_IND_SITUACION")
    private Character cigIndSituacion;
    @JoinColumn(name = "CGRADO_CODIGO", referencedColumnName = "CGRADO_CODIGO", insertable = false, updatable = false)
    @ManyToOne(optional = false)
    private SipreGrado sipreGrado;
    @JoinColumn(name = "CCI_CODIGO", referencedColumnName = "CCI_CODIGO", insertable = false, updatable = false)
    @ManyToOne(optional = false)
    private SipreConceptoIngreso sipreConceptoIngreso;

    public SipreIngresoGrado() {
    }

    public SipreIngresoGrado(SipreIngresoGradoPK sipreIngresoGradoPK) {
        this.sipreIngresoGradoPK = sipreIngresoGradoPK;
    }

    public SipreIngresoGrado(SipreIngresoGradoPK sipreIngresoGradoPK, Character cigIndSituacion) {
        this.sipreIngresoGradoPK = sipreIngresoGradoPK;
        this.cigIndSituacion = cigIndSituacion;
    }

    public SipreIngresoGrado(String cgradoCodigo, String cciCodigo) {
        this.sipreIngresoGradoPK = new SipreIngresoGradoPK(cgradoCodigo, cciCodigo);
    }

    public SipreIngresoGradoPK getSipreIngresoGradoPK() {
        return sipreIngresoGradoPK;
    }

    public void setSipreIngresoGradoPK(SipreIngresoGradoPK sipreIngresoGradoPK) {
        this.sipreIngresoGradoPK = sipreIngresoGradoPK;
    }

    public BigDecimal getNigMonto() {
        return nigMonto;
    }

    public void setNigMonto(BigDecimal nigMonto) {
        this.nigMonto = nigMonto;
    }

    public Character getCigIndIngreso() {
        return cigIndIngreso;
    }

    public void setCigIndIngreso(Character cigIndIngreso) {
        this.cigIndIngreso = cigIndIngreso;
    }

    public Character getCigIndCalculo() {
        return cigIndCalculo;
    }

    public void setCigIndCalculo(Character cigIndCalculo) {
        this.cigIndCalculo = cigIndCalculo;
    }

    public Character getCigIndSituacion() {
        return cigIndSituacion;
    }

    public void setCigIndSituacion(Character cigIndSituacion) {
        this.cigIndSituacion = cigIndSituacion;
    }

    public SipreGrado getSipreGrado() {
        return sipreGrado;
    }

    public void setSipreGrado(SipreGrado sipreGrado) {
        this.sipreGrado = sipreGrado;
    }

    public SipreConceptoIngreso getSipreConceptoIngreso() {
        return sipreConceptoIngreso;
    }

    public void setSipreConceptoIngreso(SipreConceptoIngreso sipreConceptoIngreso) {
        this.sipreConceptoIngreso = sipreConceptoIngreso;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (sipreIngresoGradoPK != null ? sipreIngresoGradoPK.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreIngresoGrado)) {
            return false;
        }
        SipreIngresoGrado other = (SipreIngresoGrado) object;
        if ((this.sipreIngresoGradoPK == null && other.sipreIngresoGradoPK != null) || (this.sipreIngresoGradoPK != null && !this.sipreIngresoGradoPK.equals(other.sipreIngresoGradoPK))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreIngresoGrado[ sipreIngresoGradoPK=" + sipreIngresoGradoPK + " ]";
    }
    
}
